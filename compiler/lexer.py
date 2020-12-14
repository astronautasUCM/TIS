import re

class HTMLlexer:

    include = r'(\{% include [\w\.\\]+ %\})'

    def t_include(self, string):
        edit = string
        split = re.finditer(self.include, string)
        for word in split:
            file = self.t_include(open(word.group(0).split()[2]).read())
            edit = re.sub(word.group(0), file, edit)
        return edit

    def parse(self, file):
        s = ''
        with open(file, 'r') as f:
            string = f.read()
            s = self.t_include(string)
            f.close()
        with open('d_' + file, 'w') as f:
            f.write(s)
            f.close()
        
    


string = '{% include hello %} asdfadf adj;f adfj;adskjfa;osinfdas faisodjfa;sdf {% include bye %}'
lex = HTMLlexer()
lex.parse("index.html")