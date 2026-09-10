<function name="SetDeafenTime" parent="Player" type="classfunc">
	<description>
		<internal></internal>
		Sets the `CurTime()` timestamp until which the player is stunned/deafened.<br>
		Prefer using <page>Player:SlasherStunDeafen</page>, which won't shorten an existing, longer deafen.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="time" type="number">The value to set.</arg>
	</args>
</function>