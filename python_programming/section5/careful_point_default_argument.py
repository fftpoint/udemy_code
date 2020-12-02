# セクション5: 制御フローとコード構造
# デフォルト引数で気をつけること

def test_func(x, l=[]):
    l.append(x)
    return(l)
"""
y = [1, 2, 3]
r = test_func(100, y)
print(r)

y = [1, 2, 3]
r = test_func(200, y)
print(r)
"""

# リストは参照渡しのため、引数にリストを入れないようにする（ディクショナリーも）
r = test_func(100)
print(r)

r = test_func(100)
print(r)

print('------------------')
def test_func2(x, l=None):
    if l == None:
        l = []
    l.append(x)
    return l

r = test_func2(100)
print(r)

r = test_func2(100)
print(r)