import copy

def removeEdge(G,i,j):
    A = copy.deepcopy(G) #so as to not change original adjancency matrix

    A[i-1][j-1]=0 # -1 because array indexing starts at 0
    A[j-1][i-1]=0

    return G

def connect(A):
    #code goes here
    pass

def listBridges(A):
    n=len(A[0])

    for i in range(n):
        for j in range(n):
            if( A[i][j]==1 and (not connect(removeEdge(A,i,j))) and i<j):
                 print(i+1,j+1) # +1 because arrays indexing starts at 0




M2=[[1,1,0,0], 
    [1,1,1,1],
    [0,1,1,0],
    [0,1,0,1]]


listBridges(M2)
                

