A=[3,7,4,5,1]

x=17

def FindEl(j,y):
    if(j==0):
        return False
    elif(A[j-1]==y):
        return True
    else:
        return FindEl(j-1,y)


def TwoEl(n,x):
    if(n<=1):
        return False
    else:
        if(TwoEl(n-1,x)):
            return True
        else:
            return (FindEl(n-1,x-A[n-1]))



print(TwoEl(len(A), x))
    
