# セクション4: データ構造
# 21.タプル型

t = (1, 2, 3, 4, 1, 2)
print(t)
# tuple is immutable
print(type(t))
# t[0] = 100 # エラー
print(t[0])
print(t[-1])
print(t[2:5])
print(t.index(1))
print(t.index(1, 1))
print(t.count(1))

t = ([1, 2, 3], [4, 5, 6])
print(t)
# t[0] = t[1] # エラー
print(t[0][0])

# タプルの中のリストはミュータブル
t[0][0]=100
print(t)

# ,をつけた時点でtuple
t = 1, 2, 3
print(type(t))
print(t)
t = 1, # バグになりやすい
print(type(t))
t = ()
print(type(t))
t = (1)
print(type(t))
t = ('test')
print(type(t))
t = ('test', )
print(type(t))
t = 1,
# t += 100 # エラー

# tupleに追加や変更をしたい場合は新しいtupleを作成する
new_tuple = (1, 2, 3) + (4, 5, 6)
# new_tuple = (1) + (4, 5, 6) # int+tupleはエラー
new_tuple = (1,) + (4, 5, 6)



