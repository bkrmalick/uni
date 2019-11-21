def listEdges(A):
    n=len(A[0])

    for i in range(n):
        for j in range(n):
            if(A[i][j]==1 and i<j):
                print(i+1,j+1) # +1 because arrays indexing starts at 0
                

M2=[[1,1,0,0], 
    [1,1,1,1],
    [0,1,1,0],
    [0,1,0,1]]

M= [[1,1,1,0], 
    [1,1,1,1],
    [1,1,1,0],
    [0,1,0,1]]

listEdges(M2)
##1 2
##2 3
##2 4

listEdges(M)

##1 2
##1 3
##2 3
##2 4






    

