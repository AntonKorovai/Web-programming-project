import pandas as pd
import pymysql
from sqlalchemy import create_engine
from faker import Faker

#pay attention to pass exact name to db because it overwrites the headers.

# MySQL database configuration
db_config = {
    'user': 'root',
    'password': '',
    'host': 'localhost',
    'database': 'BookShop',
}

# Number of fake records to generate
num_records = 20

def generate_fake_data(num_records):
    fake = Faker()
    data = {
        'Author': [fake.name() for _ in range(num_records)],
        'Title': [fake.sentence(nb_words=2, variable_nb_words=True) for _ in range(num_records)],
        'OwnerUsername': "Admin"
        # Add more fields as needed
    }
    return pd.DataFrame(data)

def load_data_to_mysql(data, db_config):
    try:
        # Create a MySQL connection and engine
        engine = create_engine(f"mysql+pymysql://{db_config['user']}:{db_config['password']}@{db_config['host']}/{db_config['database']}")

        # Insert data into the MySQL database
        data.to_sql('Book', con=engine, if_exists='replace', index=True)

        print("Fake data successfully loaded to MySQL database.")

    except Exception as e:
        print(f"Error: {e}")


if __name__ == "__main__":
    fake_data = generate_fake_data(num_records)
    load_data_to_mysql(fake_data, db_config)