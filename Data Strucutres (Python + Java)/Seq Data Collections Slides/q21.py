class node:
    def __init__(self,data,nex):
        self.data=data
        self.nex=nex

class LL:
    def __init__(self, head):
        self.head = head


a4=node(-23,None)
a3=node(5,a4)
a2=node(2,a3)
a1=node(1,a2)

a=LL(a1)

head=a.head

m=head.data
while(head!=None):
    if(head.data<m):
        m=head.data
        
    head=head.nex


print(m)

        
