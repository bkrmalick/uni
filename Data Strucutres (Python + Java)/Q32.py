b=[0,1,1,1]
l=len(b)-1

while(l>=0):
    if(b[l]==0):
        b[l]=b[l]+carry
        break
    else:
        b[l]=0
        carry=1

    l=l-1


print(b)
