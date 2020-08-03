# セクション4: データ構造
# 集合型

a = {1, 2, 2, 3, 4, 4, 4, 5, 6}
print('a: ', a)
print(type(a))

b = {2, 3, 3, 6, 7}
print('b: ', b)
print(a-b)
print(b-a)

print(a & b)
# print(a + b) # エラー

print(a | b)
print(a ^ b)
