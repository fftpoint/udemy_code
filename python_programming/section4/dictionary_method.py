# セクション4: データ構造
# 25.辞書型のメソッド

d = {'x': 10, 'y': 20}
print(d)
print(d.keys())
print(d.values())
d2 = {'x': 1000, 'j': 500}
print(d2)

# dをd2のデータで更新する
d.update(d2)
print(d)
print(d.get('x'))

# print(d['z']) # エラー
print(d.get('z')) # エラーじゃない
print(type(d.get('z')))

print(d.get('z'))
print(d)
print(d.pop('x'))
print(d)
del d['y']
print(d)

# 削除系
del d
# print(d) # エラー
d = {'a': 100, 'b': 200}
d.clear()
print(d)

# キーが存在するか確かめる
d = {'a': 100, 'b': 200}
print('a' in d)
print('j' in d)
