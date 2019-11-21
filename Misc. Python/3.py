from math import *

x=100
y=20
u=5
v=3

while(1):
    r=int(input('Please input r: '))
    
    d1=sqrt((x-r)**2+y**2)
    t=(d1/v)+(r/u)
    print('t: ', t)
