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

head=a.head

s=0
while(head.nex!=None):
    s=s+head.data*head.nex.data
        
    head=head.nex


print(s)

        
