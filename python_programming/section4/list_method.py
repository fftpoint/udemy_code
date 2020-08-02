# セクション4: データ構造
# 18.リストのメソッド

r =[1, 2, 3, 4, 5, 1, 2, 3]
print(r.index(3)) # 何番目にあるか
print(r.index(3, 3)) # ３番目のインデックスから探す

print(r.count(3)) # 何個あるか

if 5 in r:
    print('exist')

if 100 in r:
    print('exist')

# 並び替え
r.sort()
print(r)
r.sort(reverse=True)
print(r)
r.reverse()
print(r)

# split
s = 'My name is Mike'
to_split = s.split(' ')
print(to_split)

# 結合
x = ' '.join(to_split)
print(x)
x = '###'.join(to_split)
print(x)
