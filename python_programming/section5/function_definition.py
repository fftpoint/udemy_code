# セクション5: 制御フローとコード構造
# 48. 関数定義
def say_something():
    # print('hi')
    s = 'hi'
    return s

# 関数定義は上に書く
# print(type(say_something()))

"""
f = say_something
f()
"""

result = say_something()
print(result)

def what_is_this(color):
    if color == 'red':
        return 'tomato'
    elif color == 'green':
        return 'green pepper'
    else:
        return "I don't know"
    # print(color)

# what_is_this('red')
result = what_is_this('green')
print(result)
