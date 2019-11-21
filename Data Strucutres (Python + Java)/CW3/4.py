def IsStar(M): #where M is adjacency matrix to be checked
    n=len(M[0]) #number of vertices
    flag='Yes'

    v=-1

    for i in range(n):
        sumRow=0
        for j in range(n):
            sumRow=sumRow+M[i][j]
            
        if (sumRow==n):
           v=i
           
    for i in range(n):
        for j in range(n):
            if(M[i][j]==1 and not(i==j or i==v or j==v)):
               flag='No'

            if(M[i][j]==0 and (i==j or i==v or j==v)):
               flag='No'

    if(v==-1):
        flag='No'

    return flag

M2=[[1,1,0,0], #star with vertex 2 centre
    [1,1,1,1],
    [0,1,1,0],
    [0,1,0,1]]

M= [[1,1,1,0], #not star
    [1,1,1,1],
    [1,1,1,0],
    [0,1,0,1]]


print(IsStar(M2)) #Yes
print(IsStar(M))  #No      






    

