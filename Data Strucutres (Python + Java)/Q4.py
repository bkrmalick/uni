A=[[0,0,0,1],
   [0,0,0,0],
   [0,0,0,0],
   [0,0,0,0]]
sumRow=[0,0,0,0]
sumCol=[0,0,0,0]
sumD1=0
sumD2=0


for i in range(4):
    for j in range(4):
        sumRow[i]=sumRow[i]+A[i][j]
        sumCol[j]=sumCol[j]+A[i][j]

        if(i==j):
            sumD1=sumD1+A[i][j]
        elif(i+j==3):
            sumD2=sumD2+A[i][j]


for i in range(4):
    if(sumRow[i]!=0):
        print("row",i,"sum not zero")
    if(sumCol[i]!=0):
        print("col",i,"sum not zero")
        
if(sumD1!=0):
        print("D1 sum not zero")
if(sumD2!=0):
        print("D2 sum not zero")
     
