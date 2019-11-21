meters=int(input('meters: '))

miles=meters/1609.34
#yards=(miles-int(miles))*1760
feet=(miles-int(miles))*1760*3
inches=(feet-int(feet))*12

print('miles: ', int(miles))
print('feet: ', int(feet))
print('inches: ', int(inches))



