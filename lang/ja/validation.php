<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeには:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには:date以降の日付を指定してください。',
    'alpha' => ':attributeは英字のみ使用できます。',
    'alpha_dash' => ':attributeは英数字とダッシュ(-)及び下線(_)が使用できます。',
    'alpha_num' => ':attributeは英数字のみ使用できます。',
    'array' => ':attributeは配列でなければなりません。',
    'ascii' => ':attributeは半角の英数字と記号のみ使用できます。',
    'before' => ':attributeには:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには:date以前の日付を指定してください。',
    'between' => [
        'array' => ':attributeは:min個から:max個の間で指定してください。',
        'file' => ':attributeは:minKBから:maxKBの間のサイズにしてください。',
        'numeric' => ':attributeは:minから:maxの間で指定してください。',
        'string' => ':attributeは:min文字から:max文字の間で入力してください。',
    ],
    'boolean' => ':attributeはtrueかfalseを指定してください。',
    'confirmed' => ':attributeと確認用の入力が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeには:dateと同じ日付を指定してください。',
    'date_format' => ':attributeは:format形式で指定してください。',
    'decimal' => ':attributeは小数点以下:decimal桁で指定してください。',
    'declined' => ':attributeを拒否してください。',
    'declined_if' => ':otherが:valueの場合、:attributeを拒否してください。',
    'different' => ':attributeと:otherには異なる値を指定してください。',
    'digits' => ':attributeは:digits桁で指定してください。',
    'digits_between' => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions' => ':attributeの画像サイズが正しくありません。',
    'distinct' => ':attributeに重複した値があります。',
    'doesnt_end_with' => ':attributeは:valuesのいずれかで終わってはいけません。',
    'doesnt_start_with' => ':attributeは:valuesのいずれかで始まってはいけません。',
    'email' => ':attributeには有効なメールアドレスを指定してください。',
    'ends_with' => ':attributeは:valuesのいずれかで終わる必要があります。',
    'enum' => '選択された:attributeは正しくありません。',
    'exists' => '選択された:attributeは正しくありません。',
    'file' => ':attributeにはファイルを指定してください。',
    'filled' => ':attributeに値を入力してください。',
    'gt' => [
        'array' => ':attributeは:value個より多く指定してください。',
        'file' => ':attributeは:valueKBより大きいサイズにしてください。',
        'numeric' => ':attributeは:valueより大きい値にしてください。',
        'string' => ':attributeは:value文字より長く入力してください。',
    ],
    'gte' => [
        'array' => ':attributeは:value個以上指定してください。',
        'file' => ':attributeは:valueKB以上のサイズにしてください。',
        'numeric' => ':attributeは:value以上の値にしてください。',
        'string' => ':attributeは:value文字以上で入力してください。',
    ],
    'image' => ':attributeには画像ファイルを指定してください。',
    'in' => '選択された:attributeは正しくありません。',
    'in_array' => ':attributeが:otherに存在しません。',
    'integer' => ':attributeは整数で指定してください。',
    'ip' => ':attributeには有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeには有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには有効なIPv6アドレスを指定してください。',
    'json' => ':attributeには有効なJSON文字列を指定してください。',
    'lowercase' => ':attributeは小文字で指定してください。',
    'lt' => [
        'array' => ':attributeは:value個より少なく指定してください。',
        'file' => ':attributeは:valueKBより小さいサイズにしてください。',
        'numeric' => ':attributeは:valueより小さい値にしてください。',
        'string' => ':attributeは:value文字より短く入力してください。',
    ],
    'lte' => [
        'array' => ':attributeは:value個以下にしてください。',
        'file' => ':attributeは:valueKB以下のサイズにしてください。',
        'numeric' => ':attributeは:value以下の値にしてください。',
        'string' => ':attributeは:value文字以下で入力してください。',
    ],
    'mac_address' => ':attributeには有効なMACアドレスを指定してください。',
    'max' => [
        'array' => ':attributeは:max個以下にしてください。',
        'file' => ':attributeは:maxKB以下のサイズにしてください。',
        'numeric' => ':attributeは:max以下の値にしてください。',
        'string' => ':attributeは:max文字以内で入力してください。',
    ],
    'max_digits' => ':attributeは:max桁以下で指定してください。',
    'mimes' => ':attributeには:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには:valuesタイプのファイルを指定してください。',
    'min' => [
        'array' => ':attributeは:min個以上指定してください。',
        'file' => ':attributeは:minKB以上のサイズにしてください。',
        'numeric' => ':attributeは:min以上の値にしてください。',
        'string' => ':attributeは:min文字以上で入力してください。',
    ],
    'min_digits' => ':attributeは:min桁以上で指定してください。',
    'missing' => ':attributeは指定しないでください。',
    'missing_if' => ':otherが:valueの場合、:attributeは指定しないでください。',
    'missing_unless' => ':otherが:valueでない限り、:attributeは指定しないでください。',
    'missing_with' => ':valuesが存在する場合、:attributeは指定しないでください。',
    'missing_with_all' => ':valuesが全て存在する場合、:attributeは指定しないでください。',
    'multiple_of' => ':attributeは:valueの倍数で指定してください。',
    'not_in' => '選択された:attributeは正しくありません。',
    'not_regex' => ':attributeの形式が正しくありません。',
    'numeric' => ':attributeは数字で指定してください。',
    'password' => [
        'letters' => ':attributeは少なくとも1文字の英字を含めてください。',
        'mixed' => ':attributeは少なくとも1文字の大文字と小文字を含めてください。',
        'numbers' => ':attributeは少なくとも1文字の数字を含めてください。',
        'symbols' => ':attributeは少なくとも1文字の記号を含めてください。',
        'uncompromised' => '入力された:attributeは漏洩したデータの中に含まれています。別の:attributeを選択してください。',
    ],
    'present' => ':attributeが存在しません。',
    'prohibited' => ':attributeは指定できません。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは指定できません。',
    'prohibited_unless' => ':otherが:valuesのいずれかでない場合、:attributeは指定できません。',
    'prohibits' => ':attributeが存在する場合、:otherは指定できません。',
    'regex' => ':attributeの形式が正しくありません。',
    'required' => ':attributeを入力してください。',
    'required_array_keys' => ':attributeには:valuesのキーを含めてください。',
    'required_if' => ':otherが:valueの場合、:attributeを入力してください。',
    'required_if_accepted' => ':otherが承認されている場合、:attributeを入力してください。',
    'required_unless' => ':otherが:valuesでない場合、:attributeを入力してください。',
    'required_with' => ':valuesが指定されている場合、:attributeを入力してください。',
    'required_with_all' => ':valuesが全て指定されている場合、:attributeを入力してください。',
    'required_without' => ':valuesが指定されていない場合、:attributeを入力してください。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを入力してください。',
    'same' => ':attributeと:otherは一致させてください。',
    'size' => [
        'array' => ':attributeは:size個にしてください。',
        'file' => ':attributeのサイズは:sizeKBにしてください。',
        'numeric' => ':attributeは:sizeにしてください。',
        'string' => ':attributeは:size文字にしてください。',
    ],
    'starts_with' => ':attributeは:valuesのいずれかで始まる必要があります。',
    'string' => ':attributeは文字列で指定してください。',
    'timezone' => ':attributeには有効なタイムゾーンを指定してください。',
    'unique' => ':attributeはすでに使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字で指定してください。',
    'url' => ':attributeには有効なURLを指定してください。',
    'ulid' => ':attributeには有効なULIDを指定してください。',
    'uuid' => ':attributeには有効なUUIDを指定してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'password' => [
            'alpha_num' => 'パスワードは英数字のみ使用できます。',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'username' => 'ユーザー名',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード確認',
        'post' => '投稿内容',
        'bio' => '自己紹介',
        'icon_image' => 'アイコン画像',
    ],

];
