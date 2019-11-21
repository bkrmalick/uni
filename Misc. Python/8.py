price=10
while(1):
    change=float(input('money input: '))
    money=10-change
    dollars=int(money)
    cents=(money-int(money))*100

    print('dollars: ',dollars)
    print('cents: ', cents)
