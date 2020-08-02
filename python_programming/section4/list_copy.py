# セクション4: データ構造
# 19.リストのコピー

i = [1, 2, 3, 4, 5]
j = i
print('j = ', j)
print('i = ', i)

# 値渡しと参照渡し
'''
・リスト、辞書は参照渡し
・数字は値渡し

j = i -> jにiのアドレスを代入している
iとjは同じリストを参照している
'''
j[0] = 100
print('j = ', j)
print('i = ', i)

x = [1, 2, 3, 4, 5]
y = x.copy() # y = x[:]でも良い
y[0] = 100
print('x = ', x)
print('y = ', y)

x = 20
y = x
y = 5
# id(n): オブジェクトnのid(識別値)を返す
print(id(x))
print(id(y))
print(x)
print(y)

x = ['a', 'b']
y = x
y[0] = 'p'
print(id(x))
print(id(y))
print(x)
print(y)
