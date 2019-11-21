class Node:
    def __init__(self,nex,data):
        self.nex=nex
        self.data=data

class LL:
    def __init__(self, head):
        self.head=head

    def getHead(self):
        return self.head

def swap(i,j):
    tmp=i.data
    i.data=j.data
    j.data=tmp

def smallest(head1):

    head=head1

    minn=head.data
    while(head!=None):
        if(minn>head.data):
            minn=head.data

        head=head.nex
        
    while(head1!=None):
        if(minn==head1.data):
            return head1

        head1=head1.nex


def selectionSort(head):

    while(head!=None):
        swap(head, smallest(head))
        head=head.nex


n4=Node(None,3)
n3=Node(n4,1)
n2=Node(n3,4)
n1=Node(n2,6)

A=LL(n1)


selectionSort(A.getHead())

head= A.getHead()
while(head!=None):
        print(head.data)

        head=head.nex
