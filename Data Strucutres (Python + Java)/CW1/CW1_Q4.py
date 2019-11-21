A=[[0,1],
   [0,1]]

n=len(A)

row_flag=False
col_flag=False


for i in range(0,n):

    row_total=0
    col_total=0
    
    for j in range(0,n):
        row_total=row_total+A[i][j]
        col_total=col_total+A[j][i]

    if(row_total>=2):
        row_flag=True
    if(col_total>=2):
        col_flag=True
    
    
if(row_flag):
    print("Two or more 1's on same row")

if(col_flag):
    print("Two or more 1's on same col")
        


        
