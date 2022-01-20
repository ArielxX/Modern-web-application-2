<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'abstract' => $this->faker->paragraph,
            'text' => "

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis, orci facilisis mollis pretium, metus urna tempus sem, vitae accumsan eros nunc ut eros. Maecenas sit amet dolor risus. Mauris ultrices sit amet ante in euismod. Vivamus facilisis nibh arcu, in dapibus ante scelerisque ut. Etiam vitae lobortis dui, sed hendrerit tortor. Vestibulum ultricies lobortis nunc at molestie. Curabitur scelerisque sed sem ut pharetra.

Integer consectetur libero sit amet enim pulvinar suscipit. Mauris tempus non odio in rhoncus. Sed ac lacus quis est tristique scelerisque quis quis nisl. Nulla facilisi. Donec aliquam pellentesque nisl, id faucibus lacus porta non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis purus diam, suscipit sit amet volutpat id, rutrum a erat. In tincidunt pretium tortor, ornare pulvinar ex. Donec accumsan, elit vel luctus molestie, tellus ligula bibendum justo, ac convallis enim tellus at neque. In auctor nibh in ante aliquam efficitur. Pellentesque ullamcorper tincidunt suscipit. Fusce varius magna elit, a scelerisque lacus molestie eu.

Quisque a leo massa. Duis interdum tempor placerat. In nec tempus arcu, a ultricies justo. Fusce elit nisi, aliquam quis libero a, efficitur aliquam diam. Quisque et sagittis magna, ac consequat erat. Fusce rutrum sit amet tortor porttitor luctus. Sed nec lectus consectetur, ornare ligula pellentesque, congue dui. Morbi interdum augue sed tortor pellentesque egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lorem elit, vestibulum nec elit nec, pellentesque ultricies lectus. Aenean iaculis luctus ultrices. Suspendisse suscipit magna odio, sit amet facilisis massa tincidunt in. Nullam quis augue sit amet urna posuere maximus. Proin scelerisque, velit ac tincidunt condimentum, purus odio condimentum turpis, ac bibendum sapien ligula non neque.

Sed lacinia mi eget felis efficitur, ut malesuada nunc mollis. In aliquam a ex id tincidunt. Vivamus elementum ante sapien. Vestibulum at magna ante. Pellentesque ultrices bibendum viverra. Nullam molestie ante vitae libero facilisis, ut ultrices risus convallis. Cras ut sem posuere, molestie augue pulvinar, malesuada felis. Curabitur imperdiet nibh odio. Integer dolor urna, semper vitae dignissim sit amet, malesuada sit amet neque. Curabitur aliquet, justo eget cursus commodo, nisi dui auctor tortor, ac hendrerit ipsum nulla eget odio. Duis aliquet ante neque, a cursus nisl maximus vitae. Aenean feugiat sem sit amet mi congue, in aliquet sapien eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur finibus molestie orci, id dapibus nulla fringilla a. Integer eget massa ultrices, efficitur metus quis, iaculis neque.

Donec in egestas sem. Sed mattis, risus eu fringilla convallis, nibh tortor faucibus enim, a consectetur velit sapien sed sapien. Nullam quis elementum eros, in consequat lacus. Phasellus commodo justo nec faucibus rhoncus. Ut lobortis, urna ut fringilla pretium, diam diam blandit leo, eu gravida turpis mauris eget magna. Integer venenatis iaculis mauris, at maximus nunc sodales vitae. Proin ligula sem, euismod id commodo at, volutpat id augue. Duis fringilla egestas lorem, sed porttitor purus.

Aenean pulvinar, lectus pretium condimentum cursus, augue ante accumsan est, ut gravida ex magna a neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Pellentesque egestas, orci a suscipit viverra, erat ipsum pretium massa, ut volutpat turpis est in nulla. Nunc scelerisque, dolor ac gravida egestas, nulla eros ullamcorper dui, nec ultricies lectus elit posuere ex. Aliquam sagittis volutpat leo ut consequat. Mauris pretium leo et semper elementum. Etiam nec lorem in lacus gravida condimentum.

Phasellus congue euismod sem, nec aliquet velit volutpat a. Fusce consequat tellus ac tortor tempor auctor. Phasellus venenatis nibh felis, quis ornare leo efficitur ac. In hac habitasse platea dictumst. Integer tempor ex purus, in vestibulum libero fringilla in. Integer mattis semper pretium. Maecenas interdum commodo vulputate. Aliquam erat volutpat. Cras et neque sit amet urna fringilla cursus eu ut erat.

Mauris eleifend neque mauris, quis dapibus felis efficitur ut. Vestibulum aliquet, risus interdum venenatis iaculis, mauris urna convallis ante, sit amet rhoncus ante orci ac urna. Nulla porta tortor tortor, a vulputate neque blandit non. Quisque dapibus nibh arcu, quis maximus arcu congue nec. Nullam ut porta tortor, mollis condimentum tellus. Nulla eget lacus rutrum, maximus ante ac, placerat arcu. Sed vitae turpis eu sem condimentum interdum ut vitae risus. Integer quis vehicula mi. Nulla rutrum scelerisque turpis sit amet porttitor.

Aenean et aliquam turpis. Morbi porttitor pulvinar auctor. Quisque pretium placerat commodo. Suspendisse ac neque blandit, consequat sapien vitae, ullamcorper sapien. Morbi eget magna laoreet, elementum libero ac, tempus sem. Ut quis urna vulputate massa iaculis ornare sit amet sit amet nunc. Mauris sed commodo libero.

Cras id tempor ante. Morbi sit amet pulvinar nulla. Sed aliquam nec mi eu faucibus. Nunc sed finibus dolor, et facilisis justo. Vestibulum bibendum rhoncus eros a tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tristique rhoncus posuere. Sed sed lorem elementum, tristique nunc ut, dapibus tellus.",
            'author_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
