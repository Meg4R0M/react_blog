<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ArticlesFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Articles();
        $article1->setCategorie($this->getReference('categorie1'));
        $article1->setImage($this->getReference('media7'));
        $article1->setTitre("Article Test 1");
        $article1->setAccroche("
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper velit a mi aliquam, at vehicula turpis bibendum. Cras ac posuere nulla. Proin viverra tellus a libero laoreet laoreet a vitae ipsum. Aenean at tortor arcu. Donec elit nunc, porta sed metus ut, sodales laoreet diam. Sed ac rutrum urna. Donec fermentum consectetur vulputate. Aenean ac dolor volutpat, rhoncus erat ut, ornare ante. Proin at pretium ex, at fringilla augue. Aenean sollicitudin laoreet nibh, nec elementum orci feugiat nec. Vestibulum ex purus, pharetra id risus at, bibendum fringilla tortor. Vivamus tempor ullamcorper urna, sit amet dapibus dui vehicula sed. 
        ");
        $article1->setPost("
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper velit a mi aliquam, at vehicula turpis bibendum. Cras ac posuere nulla. Proin viverra tellus a libero laoreet laoreet a vitae ipsum. Aenean at tortor arcu. Donec elit nunc, porta sed metus ut, sodales laoreet diam. Sed ac rutrum urna. Donec fermentum consectetur vulputate. Aenean ac dolor volutpat, rhoncus erat ut, ornare ante. Proin at pretium ex, at fringilla augue. Aenean sollicitudin laoreet nibh, nec elementum orci feugiat nec. Vestibulum ex purus, pharetra id risus at, bibendum fringilla tortor. Vivamus tempor ullamcorper urna, sit amet dapibus dui vehicula sed.

Integer nec purus at nisl tincidunt volutpat a id quam. Pellentesque accumsan sem magna, sit amet bibendum dui dapibus ac. Phasellus ac arcu a neque laoreet condimentum eu ac eros. Aenean quis aliquet leo, vel ultrices nisl. Nam scelerisque elit ac odio condimentum tincidunt. Etiam in nulla arcu. Mauris varius ut libero fermentum efficitur. Morbi maximus commodo metus id mollis. Nullam enim metus, efficitur in dui vitae, porttitor tincidunt leo. Nulla tortor arcu, blandit sed efficitur eu, ornare a magna. Pellentesque ut posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse lobortis condimentum lectus, non feugiat dolor.

Sed condimentum arcu eu erat laoreet, ac lobortis dui euismod. Phasellus varius nec quam in interdum. Vivamus vitae erat maximus, viverra tellus in, vulputate lacus. Sed pretium nulla tellus, eu tristique metus pulvinar non. Aliquam erat volutpat. Nam et interdum ex. Vivamus ante est, ullamcorper a odio sodales, volutpat varius magna. Sed elit risus, luctus efficitur augue sed, tempor sagittis odio. Maecenas bibendum pellentesque tincidunt. Cras bibendum diam vitae mi porta semper. Maecenas id mi id risus pretium lobortis nec id diam.

Vestibulum malesuada quam vel auctor fringilla. Nunc dictum vitae massa ac varius. Proin nisi magna, viverra et aliquam ornare, hendrerit sit amet magna. Etiam ac finibus nisl. Pellentesque ac felis ut libero interdum tristique. Curabitur egestas turpis at hendrerit blandit. Morbi vitae tempor quam, vel iaculis lectus. Sed risus sapien, faucibus et pharetra id, aliquam et dolor. Suspendisse potenti. Nunc nec varius eros. In vel ultricies sem. Ut sed nibh venenatis, gravida odio vel, iaculis felis. Nunc est urna, molestie non gravida nec, feugiat ut sapien. In porttitor porttitor lacus, non faucibus velit placerat eget.

Vestibulum nec posuere dolor, cursus fermentum nisl. Maecenas luctus mauris enim, quis suscipit massa sodales ut. Nunc ac mi commodo, aliquet massa ut, porttitor sem. Aenean hendrerit hendrerit felis non varius. Praesent scelerisque auctor eros at auctor. Integer ac semper lectus. Donec hendrerit at dui et cursus. Donec aliquet augue vel justo mattis, non hendrerit enim sagittis. Mauris sed sem commodo, vehicula sapien nec, ultricies velit. Etiam lacinia id tellus fringilla faucibus. Duis et ex aliquam, consectetur felis sed, condimentum ipsum. Nunc commodo urna massa, nec lobortis ipsum porta vitae. Fusce dapibus, elit nec hendrerit vehicula, nulla ipsum convallis ipsum, ut auctor turpis velit quis arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        ");
        $article1->setPublieLe(new \DateTime('now'));
        $article1->setModifieLe(new \DateTime('now'));
        $article1->setAuteur("Admin");
        $article1->setPublie(1);

        $manager->persist($article1);

        $article2 = new Articles();
        $article2->setCategorie($this->getReference('categorie2'));
        $article2->setImage($this->getReference('media8'));
        $article2->setTitre("Article Test 2");
        $article2->setAccroche("
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper velit a mi aliquam, at vehicula turpis bibendum. Cras ac posuere nulla. Proin viverra tellus a libero laoreet laoreet a vitae ipsum. Aenean at tortor arcu. Donec elit nunc, porta sed metus ut, sodales laoreet diam. Sed ac rutrum urna. Donec fermentum consectetur vulputate. Aenean ac dolor volutpat, rhoncus erat ut, ornare ante. Proin at pretium ex, at fringilla augue. Aenean sollicitudin laoreet nibh, nec elementum orci feugiat nec. Vestibulum ex purus, pharetra id risus at, bibendum fringilla tortor. Vivamus tempor ullamcorper urna, sit amet dapibus dui vehicula sed. 
        ");
        $article2->setPost("
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper velit a mi aliquam, at vehicula turpis bibendum. Cras ac posuere nulla. Proin viverra tellus a libero laoreet laoreet a vitae ipsum. Aenean at tortor arcu. Donec elit nunc, porta sed metus ut, sodales laoreet diam. Sed ac rutrum urna. Donec fermentum consectetur vulputate. Aenean ac dolor volutpat, rhoncus erat ut, ornare ante. Proin at pretium ex, at fringilla augue. Aenean sollicitudin laoreet nibh, nec elementum orci feugiat nec. Vestibulum ex purus, pharetra id risus at, bibendum fringilla tortor. Vivamus tempor ullamcorper urna, sit amet dapibus dui vehicula sed.

Integer nec purus at nisl tincidunt volutpat a id quam. Pellentesque accumsan sem magna, sit amet bibendum dui dapibus ac. Phasellus ac arcu a neque laoreet condimentum eu ac eros. Aenean quis aliquet leo, vel ultrices nisl. Nam scelerisque elit ac odio condimentum tincidunt. Etiam in nulla arcu. Mauris varius ut libero fermentum efficitur. Morbi maximus commodo metus id mollis. Nullam enim metus, efficitur in dui vitae, porttitor tincidunt leo. Nulla tortor arcu, blandit sed efficitur eu, ornare a magna. Pellentesque ut posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse lobortis condimentum lectus, non feugiat dolor.

Sed condimentum arcu eu erat laoreet, ac lobortis dui euismod. Phasellus varius nec quam in interdum. Vivamus vitae erat maximus, viverra tellus in, vulputate lacus. Sed pretium nulla tellus, eu tristique metus pulvinar non. Aliquam erat volutpat. Nam et interdum ex. Vivamus ante est, ullamcorper a odio sodales, volutpat varius magna. Sed elit risus, luctus efficitur augue sed, tempor sagittis odio. Maecenas bibendum pellentesque tincidunt. Cras bibendum diam vitae mi porta semper. Maecenas id mi id risus pretium lobortis nec id diam.

Vestibulum malesuada quam vel auctor fringilla. Nunc dictum vitae massa ac varius. Proin nisi magna, viverra et aliquam ornare, hendrerit sit amet magna. Etiam ac finibus nisl. Pellentesque ac felis ut libero interdum tristique. Curabitur egestas turpis at hendrerit blandit. Morbi vitae tempor quam, vel iaculis lectus. Sed risus sapien, faucibus et pharetra id, aliquam et dolor. Suspendisse potenti. Nunc nec varius eros. In vel ultricies sem. Ut sed nibh venenatis, gravida odio vel, iaculis felis. Nunc est urna, molestie non gravida nec, feugiat ut sapien. In porttitor porttitor lacus, non faucibus velit placerat eget.

Vestibulum nec posuere dolor, cursus fermentum nisl. Maecenas luctus mauris enim, quis suscipit massa sodales ut. Nunc ac mi commodo, aliquet massa ut, porttitor sem. Aenean hendrerit hendrerit felis non varius. Praesent scelerisque auctor eros at auctor. Integer ac semper lectus. Donec hendrerit at dui et cursus. Donec aliquet augue vel justo mattis, non hendrerit enim sagittis. Mauris sed sem commodo, vehicula sapien nec, ultricies velit. Etiam lacinia id tellus fringilla faucibus. Duis et ex aliquam, consectetur felis sed, condimentum ipsum. Nunc commodo urna massa, nec lobortis ipsum porta vitae. Fusce dapibus, elit nec hendrerit vehicula, nulla ipsum convallis ipsum, ut auctor turpis velit quis arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        ");
        $article2->setPublieLe(new \DateTime('now'));
        $article2->setModifieLe(new \DateTime('now'));
        $article2->setAuteur("Admin");
        $article2->setPublie(1);

        $manager->persist($article2);

        $article3 = new Articles();
        $article3->setCategorie($this->getReference('categorie3'));
        $article3->setImage($this->getReference('media9'));
        $article3->setTitre("Article Test 3");
        $article3->setAccroche("
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper velit a mi aliquam, at vehicula turpis bibendum. Cras ac posuere nulla. Proin viverra tellus a libero laoreet laoreet a vitae ipsum. Aenean at tortor arcu. Donec elit nunc, porta sed metus ut, sodales laoreet diam. Sed ac rutrum urna. Donec fermentum consectetur vulputate. Aenean ac dolor volutpat, rhoncus erat ut, ornare ante. Proin at pretium ex, at fringilla augue. Aenean sollicitudin laoreet nibh, nec elementum orci feugiat nec. Vestibulum ex purus, pharetra id risus at, bibendum fringilla tortor. Vivamus tempor ullamcorper urna, sit amet dapibus dui vehicula sed. 
        ");
        $article3->setPost("
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper velit a mi aliquam, at vehicula turpis bibendum. Cras ac posuere nulla. Proin viverra tellus a libero laoreet laoreet a vitae ipsum. Aenean at tortor arcu. Donec elit nunc, porta sed metus ut, sodales laoreet diam. Sed ac rutrum urna. Donec fermentum consectetur vulputate. Aenean ac dolor volutpat, rhoncus erat ut, ornare ante. Proin at pretium ex, at fringilla augue. Aenean sollicitudin laoreet nibh, nec elementum orci feugiat nec. Vestibulum ex purus, pharetra id risus at, bibendum fringilla tortor. Vivamus tempor ullamcorper urna, sit amet dapibus dui vehicula sed.

Integer nec purus at nisl tincidunt volutpat a id quam. Pellentesque accumsan sem magna, sit amet bibendum dui dapibus ac. Phasellus ac arcu a neque laoreet condimentum eu ac eros. Aenean quis aliquet leo, vel ultrices nisl. Nam scelerisque elit ac odio condimentum tincidunt. Etiam in nulla arcu. Mauris varius ut libero fermentum efficitur. Morbi maximus commodo metus id mollis. Nullam enim metus, efficitur in dui vitae, porttitor tincidunt leo. Nulla tortor arcu, blandit sed efficitur eu, ornare a magna. Pellentesque ut posuere risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse lobortis condimentum lectus, non feugiat dolor.

Sed condimentum arcu eu erat laoreet, ac lobortis dui euismod. Phasellus varius nec quam in interdum. Vivamus vitae erat maximus, viverra tellus in, vulputate lacus. Sed pretium nulla tellus, eu tristique metus pulvinar non. Aliquam erat volutpat. Nam et interdum ex. Vivamus ante est, ullamcorper a odio sodales, volutpat varius magna. Sed elit risus, luctus efficitur augue sed, tempor sagittis odio. Maecenas bibendum pellentesque tincidunt. Cras bibendum diam vitae mi porta semper. Maecenas id mi id risus pretium lobortis nec id diam.

Vestibulum malesuada quam vel auctor fringilla. Nunc dictum vitae massa ac varius. Proin nisi magna, viverra et aliquam ornare, hendrerit sit amet magna. Etiam ac finibus nisl. Pellentesque ac felis ut libero interdum tristique. Curabitur egestas turpis at hendrerit blandit. Morbi vitae tempor quam, vel iaculis lectus. Sed risus sapien, faucibus et pharetra id, aliquam et dolor. Suspendisse potenti. Nunc nec varius eros. In vel ultricies sem. Ut sed nibh venenatis, gravida odio vel, iaculis felis. Nunc est urna, molestie non gravida nec, feugiat ut sapien. In porttitor porttitor lacus, non faucibus velit placerat eget.

Vestibulum nec posuere dolor, cursus fermentum nisl. Maecenas luctus mauris enim, quis suscipit massa sodales ut. Nunc ac mi commodo, aliquet massa ut, porttitor sem. Aenean hendrerit hendrerit felis non varius. Praesent scelerisque auctor eros at auctor. Integer ac semper lectus. Donec hendrerit at dui et cursus. Donec aliquet augue vel justo mattis, non hendrerit enim sagittis. Mauris sed sem commodo, vehicula sapien nec, ultricies velit. Etiam lacinia id tellus fringilla faucibus. Duis et ex aliquam, consectetur felis sed, condimentum ipsum. Nunc commodo urna massa, nec lobortis ipsum porta vitae. Fusce dapibus, elit nec hendrerit vehicula, nulla ipsum convallis ipsum, ut auctor turpis velit quis arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        ");
        $article3->setPublieLe(new \DateTime('now'));
        $article3->setModifieLe(new \DateTime('now'));
        $article3->setAuteur("Admin");
        $article3->setPublie(1);

        $manager->persist($article3);

        $manager->flush();
    }
    
    public function getOrder()
    {
        return 3;
    }
}
