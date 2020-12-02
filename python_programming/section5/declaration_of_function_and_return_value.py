# セクション5: 制御フローとコード構造
# 49. 関数の引数と返り値の宣言

# Python3.1から型宣言を以下の形でできるようになった
# num: int = 10

def add_num(a: int, b: int) -> int:
    return a + b

# 引数を型宣言していても入力した値の型が優先される
r = add_num('a', 'b')
print(r)