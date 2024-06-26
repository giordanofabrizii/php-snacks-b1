<?php 
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    $paragraph = ' Il signore e la signora Dursley, di Privet Drive numero 4, erano orgogliosi di affermare di essere perfettamente normali, e grazie tante. Erano le ultime persone al mondo da cui aspettarsi cose strane o misteriose, perché sciocchezze del genere proprio non le approvavano. Il signor Dursley era direttore di una ditta di nome Grunnings, che fabbricava trapani. Era un uomo corpulento, nerboruto, quasi senza collo e con un grosso paio di baffi. La signora Dursley era magra, bionda e con un collo quasi due volte più lungo del normale, il che le tornava assai utile, dato che passava gran parte del tempo ad allungarlo oltre la siepe del giardino per spiare i vicini. I Dursley avevano un figlioletto di nome Dudley e secondo loro non esisteva al mondo un bambino più bello. Possedevano tutto quel che si poteva desiderare, ma avevano anche un segreto, e il loro più grande timore era che qualcuno potesse scoprirlo. Non credevano che avrebbero potuto sopportare che qualcuno venisse a sapere dei Potter. La signora Potter era la sorella della signora Dursley, ma non si vedevano da anni. Anzi, la signora Dursley faceva addirittura finta di non avere sorelle, perché la signora Potter e quel buono a nulla del marito non avrebbero potuto essere più diversi da loro di così. I Dursley rabbrividivano al solo pensiero di quel che avrebbero detto i vicini se i Potter si fossero fatti vedere nei paraggi. Sapevano che i Potter avevano anche loro un figlio piccolo, ma non lo avevano mai visto. ';

    $substrings = explode('. ', $paragraph);

    foreach($substrings as $sub) {
        echo '<p>' . $sub . '.</p>';
    }

    // ! eliminato perche non cambiava la stringa originale

    // while (strpos($paragraph , '.') != false) {
    //     $index = strpos($paragraph , '.') + 1;
    //     $sub = substr($paragraph, 0, $index);
    //     echo $sub;
    //     str_replace($sub, '', $paragraph);
    // };
?>