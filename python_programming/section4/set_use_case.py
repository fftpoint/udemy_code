# セクション4: データ構造
# 30.集合の使い所

# SNSなどで自分の友達と他の人の友達の共通の友達を探すなどに使える
my_friends = {'A', 'C', 'D'}
A_friends = {'B', 'D', 'E', 'F'}
print(my_friends & A_friends)

# uniqueなものだけを摘出したい時など
f = ['apple', 'banana', 'apple', 'banana']
kind = set(f)
print(kind)