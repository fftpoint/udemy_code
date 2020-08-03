# セクション5: 制御フローとコード構造
# 36.INとNOTの使い所

y = [1, 2, 3]
x = 1

if x in y:
    print('in')

if 100 not in y:
    print('out')

a = 1
b = 2
# pythonでは推奨されていない書き方
"""
if not a ==b:
    print('Not equal')
"""
if a != b:
    print('Not equal')

"""
if not a < b:
わかりづらい書き方はしない
"""

is_ok = True
if is_ok:
    print('hello')

if not is_ok:
    print('hello')

"""
上記の方が分かりやすい
if is_ok == True:
if is_ok != True:
"""

