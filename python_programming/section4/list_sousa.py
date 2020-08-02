# セクション4: データ構造
# 17.リストの操作

s = ['a', 'b', 'c', 'd', 'e', 'f', 'g']
print(s)
print(s[0])
s[0] = 'X' # 文字列の時はエラーが起きるがリストはOK
s[2:5] = ['C', 'D', 'E']
print(s)
s[2:5] = []
print(s)
s[:] = []
print(s)

# FIFO, Queue
n = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
print(n)
n.append(100)
print(n)
n.insert(0, 200)
print(n)
print(n.pop())
print(n)
print(n.pop(0))
print(n)

# del文は気をつける
del n[0]
print(n)
# del n
# print(n) # nがないからエラーになる

# .remove文の方が安全
n = [1, 2, 2, 2, 3]
n.remove(2)
print(n)
n.remove(2)
n.remove(2)
print(n)
# n.remove(2) # nに2はもうないからエラーになる

# リストの結合
a = [1, 2, 3, 4, 5]
b = [6, 7, 8, 9, 10]
x = a + b
print(x)
print('##################')
a += b
print(a)
print('##################')
x = [1, 2, 3, 4, 5]
y = [6, 7, 8, 9, 10]
x.extend(y)
print(x)