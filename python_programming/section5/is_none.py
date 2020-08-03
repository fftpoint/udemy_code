# セクション5: 制御フローとコード構造
# 38.Noneを判定する場合

# PythonではnullではなくてNone
is_empty = None
print(is_empty)
# print(help(None))

# 非推奨
"""
if is_empty == None:
    print('None!!!')
"""

# 推奨
if is_empty is None:
    print('None!!!')

# isは値が等しいか判断するのではなくオブジェクトとして等しいか判断
print(1 == True)
print(1 is True)
# print(None is None)