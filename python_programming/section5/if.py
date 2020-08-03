# セクション5: 制御フローとコード構造
# 33. if文

x = 10

# インデントがいる
# {}を使わずインデントで範囲を指定する
if x < 10:
    print('negative')
elif x == 0:
    print('zero')
else:
    print('positive')

a = 5
b = 10

if a > 0:
    print('a is positive')
    if b > 0:
        print('b is positive')
