# セクション4: データ構造
# 22.タプルのアンパッキング

num_tuple = (10, 20)
print(num_tuple)
x, y = num_tuple
print(x, y)

# pythonの複数の変数宣言はタプルにしてからアンパッキングしている
x, y = 10, 20
print(x, y)

min, max = 0, 100
print(min, max)

# 多数の変数宣言は見にくい
'''
a, b, c, d, e, f = 'Mike', '1', '1', '1', 'e', 'f'
上記より
a = 'Mike'
b = '1'
・・・
'''

# アンパッキングを利用して数字の入れ替えが簡単にできる
i = 10
j = 20
tmp = i
i = j
j = tmp
print(i, j)

a = 100
b = 200
print(a, b)
a, b = b, a
print(a, b)