# セクション3: Pythonの基本
# 12.文字列のインデックスとスライス

word = 'python'
print(word[0])
print(word[1])
print(word[-1])

# スライス
print(word[0:2])
print(word[2:5])
print('#############')
print(word[0:2])
print(word[:2])
print('#############')
print(word[2:])
# print(word[100]) エラー
print('#############')
# 文字列の入れ替え
# word[0] = j エラー
word = 'j' + word[1:]
print(word[:])

# len(n): 文字列(n)の長さ
n = len(word)
print(n)

