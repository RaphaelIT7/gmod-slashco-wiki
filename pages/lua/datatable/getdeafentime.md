<function name="GetDeafenTime" parent="Player" type="classfunc">
	<description>
		Returns the `CurTime()` timestamp until which the player is stunned/deafened, as set by <page>Player:SlasherStunDeafen</page>.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="time" type="number" default="0">The current value.</ret>
	</rets>
</function>