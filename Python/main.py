from account import Account
from car import Car
from user import user 
from uberX import uberX

if __name__ == '__main__':

    print('Hola mundo')
    
    car=Car("AMS234",Account("Andres Herrera","ANDA876"))
    print(vars(car))
    print(vars(car.driver))
    
    
    
