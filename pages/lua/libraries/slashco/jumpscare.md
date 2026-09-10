<function name="Jumpscare" parent="SlashCo" type="libraryfunc">
	<description>
		Tries to make the given slasher jumpscare and kill a target survivor.<br>
		Fails silently if the slasher can't currently kill, is on kill delay, the target isn't a valid survivor, or the target is out of the slasher's <page>Slasher#KillDistance</page> (unless they're already being jumpscared).<br>
		On success it freezes both entities, plays the slasher's kill sound, and after <page>Slasher#JumpscareDuration</page> seconds deals fatal damage to the target and calls the slasher's <page>Slasher#OnKillPlayer</page> function via <page>SlasherFunction</page>.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="slasher" type="Player">The slasher performing the jumpscare</arg>
		<arg name="target" type="Entity">The target to jumpscare, must be a survivor</arg>
	</args>
	<rets>
		<ret name="success" type="boolean" optional>`true` if the jumpscare was started</ret>
	</rets>
</function>
