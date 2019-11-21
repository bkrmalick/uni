import copy

def removeEdge(G,i,j):
    A = copy.deepcopy(G)

    A[i-1][j-1]=0 # -1 because array indexing starts at 0
    A[j-1][i-1]=0

    n=len(G[0])

    for i in range(n):
        for j in range(n):
            print(A[i][j],end=',')
        print()    
                    

M= [[1,1,1,0], 
    [1,1,1,1],
    [1,1,1,0],
    [0,1,0,1]]

removeEdge(M,1,2)

##1,0,1,0,
##0,1,1,1,
##1,1,1,0,
##0,1,0,1,








    

