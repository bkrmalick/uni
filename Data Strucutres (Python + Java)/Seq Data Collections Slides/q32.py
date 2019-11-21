class node:
    def __init__(self,data,nex):
        self.data=data
        self.nex=nex

class LL:
    def __init__(self, head):
        self.head = head


a5=node(8,None)
a4=node(9,a5)
a3=node(1,a4)
a2=node(4,a3)
a1=node(2,a2)

a=LL(a1)

i=1
j=3

h1=a.head
h2=a.head
c=0

while(h1!=None and c<i):
    h1=h1.nex
    c=c+1

c=0
while(h2!=None and c<j):
    h2=h2.nex
    c=c+1

tmp=h1.data
h1.data=h2.data
h2.data=tmp

h=a.head

while(h!=None):
    print(h.data)
    h=h.nex


        
