print('p     q     r     (p and q) or (not r)')
p=False
q=False
r=False

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r))))    
p=False
q=False
r=True

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r)))) 

p=False
q=True
r=False

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r)))) 

p=False
q=True
r=True

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r)))) 

p=True
q=False
r=False

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r)))) 

p=True
q=False
r=True

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r)))) 

p=True
q=True
r=False

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r)))) 

p=True
q=True
r=True

print('%-6s%-6s%-6s%12s'%(str(p),str(q),str(r),str((p and q) or (not r)))) 

