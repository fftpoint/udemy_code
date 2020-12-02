# セクション5: 制御フローとコード構造
# 47. 辞書をfor文で処理する

d  = {'x':100, 'y': 200}

"""
for v in d:
    print(v)
"""
print(d.items())
for k, v in d.items():
    print(k, ':', v)

    