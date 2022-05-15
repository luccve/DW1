def recursividade(count=0):
    count+=1
    if count>50:
       return print("fim")
    print("hello world",count) 
    recursividade(count)

recursividade()
