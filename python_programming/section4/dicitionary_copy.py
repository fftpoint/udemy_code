# セクション4: データ構造
# 26.辞書のコピー

# 参照渡しと値渡し
x={'a': 1}
y = x
y['a'] = 1000
print(x)
print(y)

x = {'a': 1}
y = x.copy()
y['a'] = 1000
print(x)
print(y)
