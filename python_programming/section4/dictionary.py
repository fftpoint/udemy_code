# セクション4: データ構造
# 24.辞書型

d = {'x': 10, 'y': 20}
print(type(d))
print(d['x'])
print(d['y'])

d['x'] = 'xxxx'
print(d)
d['z'] = 200
print(d)
d[1] = 10000
print(d)
print(dict(a=10, b=20))
print(dict([('a', 10), ('b', 20)]))