# セクション5: 制御フローとコード構造
# 32.一行が長くなる時

s = 'aaaaaaaaaaaaaaaaa' + 'bbbbbbbbbbbbbbb'
print(s)

s = 'aaaaaaaaaaaaaaaa' \
    + 'bbbbbbbbbbbbbbbbbbb'

# ルール的には80文字以上になるときは改行

x = (1 + 1 + 1 + 1 + 1 + 1
   + 1 + 1 + 1 + 1 + 1 + 1)
print(x)