
def smallestLL(head):
    if(head.nex==None):
        return head.data
    else:
        return min(head.data, smallestLL(head.nex))

def sumconsLL(head):
    if(head==None):
        return 0
    else:
        if(head.nex!=None):
            return head.data + head.data+ sumconsLL(head.nex)
        else:
            return head.data+ sumconsLL(head.nex) 

class Node:
    def __init__(self,nex,data):
        self.nex=nex
        self.data=data

class LL:
    def __init__(self, head):
        self.head=head

    def getHead(self):
        return self.head



n4=Node(None,5)
n3=Node(n4,3)
n2=Node(n3,2)
n1=Node(n2,1)

link=LL(n1)

head=link.head

print(smallestLL(head))
print(sumconsLL(head))

