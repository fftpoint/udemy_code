# セクション3: Pythonの基本
# 11.文字列

s = 'test'
print(s)
print('hello')
print("hello")
print("I don't know")
# print('I don't know) エラー

# エスケープシークエンス
print('I don\'t know')
print('say "I don\'t know"')
# print("say "I don\'t know"") エラー
print("say \"I don't know\"")

# 改行
print('hello.\nHow are you?')
# 改行をなくすにはraw dataのrを付ける
print('C:\name\name')
print(r'C:\name\name')

print("""
line1
line2
line3
""")

# """の前に改行コードが入ってしまう
'''
print("################")
print("""
line1
line2
line3
""")
print("################")
'''

# コードが汚い
'''
print("################")
print("""line1
line2
line3""")
print("################")
'''

# \は継続文字
print("################")
print("""\
line1
line2
line3\
""")
print("################")

# 'で囲んだ物をリテラル（文字列の場合は文字列リテラル）と呼ぶ
print('Hi.' * 3 + 'Mike.')

print('Py' + 'thon')  # print('Py''thon')も同じ
# エラー
'''
prefix = 'Py'
print(prefix'thon)
'''
prefix = 'Py'
print(prefix + 'thon')

# リテラルの接続は変数があるとできないが、長い文字列の整形には便利
s = ('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
     'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb')
print(s)
# 次の行から始めて下さいの意味の|でも良い
"""
s = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa' \
    'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb'
"""




