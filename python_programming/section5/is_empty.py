# セクション5: 制御フローとコード構造
# 37.値が入っていない判定をするチェック

is_ok = ''
# is_ok = []
# False, 0, 0.0, '', (), {}, set()

if is_ok:
    print('OK!')
else:
    print('NO!')

# わざわざしなくて良い
"""
if len(is_ok):
    print('OK!')
else:
    print('NO!')
"""