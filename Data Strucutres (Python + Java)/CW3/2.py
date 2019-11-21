class node:
    def __init__(self,x,left=None,right=None):
        self.left=left
        self.right=right
        self.content=x


def prinTree(n):

    if(n.left==None and n.right==None):
        print(n.content)
    else:
        if(n.left!=None):
            prinTree(n.left)

        print(n.content)

        if(n.right!=None):
            prinTree(n.right)

def TreeSumEven(n): #where n is root node of tree
        if(n==None):
            return 0

        if(n.content%2==0):
            return n.content + TreeSumEven(n.right) + TreeSumEven(n.left)
        else:
            return TreeSumEven(n.right) + TreeSumEven(n.left)
        
    

        
        
n5=node(9)
n4=node(4)
n9=node(9)
n3=node(2,n9,n4)
n7=node(6,n5)
n1=node(1,n3,n7)

print(TreeSumEven(n1))
