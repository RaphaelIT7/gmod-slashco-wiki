<function name="GetWasSeenBySlasher" parent="Player" type="classfunc">
	<description>
		Returns whether this Survivor was spotted by the active Slasher during the round.<br>
		Checked at the end of the round to lower the rating of any <page>Document</page> they're given.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="state" type="boolean" default="false">The current value.</ret>
	</rets>
</function>