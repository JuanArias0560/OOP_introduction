import email
from unicodedata import name
from xml.dom.minidom import Document

from click import password_option


class Account:
    id          = int
    name        = str  
    Document    = str 
    email       = str
    password    = str 

    def __init__(self,name,document):
        self.name = name
        self.Document = document
       
