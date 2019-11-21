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

x=18

h1=a.head

flag=False

while(h1!=None):

    
    h2=a.head
    while(h2!=None):
        if(h1.data+h2.data == x and h1!=h2):
            flag=True
            break
        
        h2=h2.nex
        
    h1=h1.nex

print(flag)




        
